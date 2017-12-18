const path = require('path')

const HTMLAsset = require('parcel-bundler/src/assets/HTMLAsset')
const PHPParser = require('php-parser')
const Include = require('php-parser/src/ast/include')

const parser = new PHPParser({
  ast: {
    withPositions: true
  }
})

module.exports = class PHPAsset extends HTMLAsset {
  constructor (name, pkg, options) {
    super(name, pkg, options)
    this.type = 'php'
  }

  parse (code) {
    this.ast = parser.parseCode(code)
    return this.ast
  }

  apologise (require) {
    console.warn(`Sorry, hit an unsupported ${require ? 'require' : 'include'}.`)
  }

  collectDependencies () {
    let offset = 0
    this.ast.children.forEach(node => {
      if (node.constructor !== Include) return

      const {
        require,
        target: {
          kind,
          value,
          loc: {
            start,
            end
          },
          inner
        }
      } = node

      let phpPath

      if (kind === 'string') {
        phpPath = value
      } else if (kind === 'parenthesis') {
        if (inner.left.what.name !== 'dirname') {
          return this.apologise(require)
        }
        const dirname = path.dirname(this.name)
        phpPath = `${dirname}/${inner.right.value}`
      } else {
        return this.apologise(require)
      }

      const assetPath = this.addURLDependency(phpPath)

      const untilStart = this.contents.slice(0, start.offset + offset)
      const afterEnd = this.contents.slice(end.offset + offset)

      const originalLength = end.offset - start.offset
      const newLength = assetPath.length + 2

      offset += (newLength - originalLength)

      this.contents = `${untilStart}'${assetPath}'${afterEnd}`
    })

    this.ast = super.parse(this.contents)
    super.collectDependencies()
  }

  generate () {
    const {
      html
    } = super.generate()

    return {
      php: html
    }
  }
}
