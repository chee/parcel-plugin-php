module.exports = bundler =>
  bundler.addAssetType('php', require.resolve('./PHPAsset'))
