const path = require('path');

module.exports = {
  entry: {
    canvas: './blocks/canvas/canvas.js',
    run_string: './blocks/run_string/run_string.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  }
};