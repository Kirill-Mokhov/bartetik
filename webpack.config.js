const path = require('path');

module.exports = {
  entry: {
    canvas: './blocks/canvas/canvas.js',
    run_string: './blocks/run_string/run_string.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].[hash:8].js',
    sourceMapFilename: '[name].[hash:8].map',
    chunkFilename: '[id].[hash:8].js'
  }
};