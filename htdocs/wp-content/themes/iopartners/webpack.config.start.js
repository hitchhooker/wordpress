'use strict'; // eslint-disable-line

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const path = require('path');
const { merge } = require('webpack-merge');
const common = require('./webpack.config.js');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = merge(common, {
  mode: 'development',
  devtool: 'inline-source-map',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].js',
  },
  plugins: [
    new BrowserSyncPlugin({
      files: [
        './**/*.css',
        './**/*.js',
        './**/*.php',
      ],
      host: 'localhost',
      port: 3000,
      proxy: 'https://iopartners.local/',
    }),
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
  ],
});
