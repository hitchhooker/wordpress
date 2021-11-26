'use strict'; // eslint-disable-line

const webpack = require('webpack');
const StyleLintPlugin = require('stylelint-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const AutoPrefixer = require('autoprefixer');
const WebpackAssetsManifest = require('webpack-assets-manifest');
const FriendlyErrorsWebpackPlugin = require('@soda/friendly-errors-webpack-plugin');

module.exports = {
  stats: {
    entrypoints: false,
    hash: false,
    modules: false,
    performance: false,
    timings: false,
    version: false,
    chunkOrigins: false,
    children: false,
    errors: false,
    errorDetails: false,
    warnings: false,
    chunks: false,
    reasons: false,
    source: false,
    publicPath: false,
  },
  externals: {
    jquery: 'jQuery',
    wp: 'wp',
    react: 'React',
    'react-dom': 'ReactDOM',
  },
  entry: {
    main: [
      './src/js/main.js',
      './src/sass/main.scss',
    ],
    admin: [
      './src/sass/admin.scss',
    ],
  },
  plugins: [
    new StyleLintPlugin({
      context: 'src',
      files: '**/*.scss',
      failOnError: false,
      quiet: false,
    }),
    new webpack.LoaderOptionsPlugin({
      options: {
        postcss: [
          AutoPrefixer(),
        ],
      },
    }),
    new WebpackAssetsManifest({
      output: './assets.json',
    }),
    new FriendlyErrorsWebpackPlugin(),
  ],
  module: {
    rules: [
      {
        test: /\.(gif|png|jpe?g|svg)$/i,
        use: [
          'file-loader',
          {
            loader: 'image-webpack-loader',
            options: {
              bypassOnDebug: true,
              disable: true,
            },
          },
        ],
      },
      {
        // enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        // loader: 'eslint-loader',
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        options: {
          presets: ['@babel/preset-env'],
        },
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
        loader: 'file-loader',
        options: {
          name: '[name].[ext]',
        },
      },
    ],
  },
};
