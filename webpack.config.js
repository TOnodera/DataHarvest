const VueLoaderPlugin = require('vue-loader/lib/plugin');
const path = require('path');
const { resolve } = require('path');

const env = process.env.NODE_ENV || 'development';

module.exports = {
  entry: './resources/js/app.js',
  output: {
    filename: 'app.js',
    path: path.resolve('./public/js/'),
  },
  mode: env,
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  resolve:{
    alias: {
        'vue$': 'vue/dist/vue.esm.js'
      }
  }
}