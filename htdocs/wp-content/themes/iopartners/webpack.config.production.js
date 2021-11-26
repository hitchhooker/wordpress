'use strict';

const path = require('path');
const { merge } = require('webpack-merge');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const common = require('./webpack.config.js');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
var BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;


module.exports = merge(common, {
  mode: 'production',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name]_[contenthash].js',
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name]_[contenthash].css',
    }),
    new ImageminPlugin({
      pngquant: {
        quality: '80'
      }
    })
  ],
  optimization: {
    minimizer: [
      (compiler) => {
          new TerserPlugin({
            terserOptions: {
                  compress: {},
              }
          }).apply(compiler);
      },
  ],
  },
});
