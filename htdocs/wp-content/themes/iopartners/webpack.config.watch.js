'use strict'; // eslint-disable-line

const path = require('path');
const merge = require('webpack-merge');
const common = require('./webpack.config.js');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = merge(common, {
  mode: 'development',
  devtool: 'inline-source-map',
  output: {
    path: path.resolve(__dirname, './'),
    filename: '[name].js',
  },
  plugins: [
    new MiniCssExtractPlugin("./test.css", {
      filename: '[name].css',
    }),
  ],
});