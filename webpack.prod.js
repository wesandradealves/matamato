<<<<<<< HEAD
var webpack = require('webpack');
const path = require("path");
const common = require("./webpack.common");
const { merge } = require("webpack-merge");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
=======
// const path = require("path");
// const common = require("./webpack.common");
// const { merge } = require("webpack-merge");
// const { CleanWebpackPlugin } = require("clean-webpack-plugin");
// const MiniCssExtractPlugin = require("mini-css-extract-plugin");
>>>>>>> 114a568808244412b17edf6470076e2cfe10bc5c

// module.exports = merge(common, {
//   mode: "production",
//   output: {
//     filename: "[name].[contenthash].js",
//     path: path.resolve(__dirname, "dist"),
//     assetModuleFilename: "./assets/[name].[hash].[ext]",
//   },
//   transpileDependencies: true,
//   productionSourceMap: false,
//   transpileDependencies: true,
//   productionSourceMap: false,
//   lintOnSave: false,
//   filenameHashing: false,    
//   chainWebpack: config => {
//     config.optimization.delete('splitChunks');
//     config.optimization.minimize(false);
//   },    
//   plugins: [
//     new webpack.ProvidePlugin({
//       $: "jquery",
//       jQuery: "jquery"
//     }),    
//     new MiniCssExtractPlugin({ filename: "[name].[contenthash].css" }),
//     new CleanWebpackPlugin(),
//   ],
//   module: {
//     rules: [
//       {
//         test: /\.scss$/,
//         use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
//       },
//     ],
//   },
// });

var webpack = require('webpack')
const HTMLWebpackPlugin = require("html-webpack-plugin");
const ASSET_PATH = process.env.ASSET_PATH || '/';
module.exports = {
  mode: "production",
  entry: {
    jquery: "./src/js/jquery.min.js",
    main: "./src/js/app.js", 
    style: "./src/js/app.js", 
  },
  plugins: [
    new webpack.DefinePlugin({
      'process.env.ASSET_PATH': JSON.stringify(ASSET_PATH)
    }),    
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),      
    new HTMLWebpackPlugin({
      template: "./src/index.html",
    }),
  ],
  module: {
    rules: [
      {
          test: /\.scss$/,
          exclude: /node_modules/,
          use: [
              {
                  loader: 'file-loader',
                  options: { outputPath: '', name: '[name].min.css'}
              },
              'sass-loader'
          ]
      },
      {
        test: /\.html$/,
        use: ["html-loader"]
      },
    ],
  },
};