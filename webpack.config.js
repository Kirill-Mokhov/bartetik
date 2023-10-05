const path = require('path');

module.exports = {
  entry: {
    canvas: './blocks/canvas/canvas.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  }
};