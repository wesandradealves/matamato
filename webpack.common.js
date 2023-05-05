var webpack = require('webpack')
const HTMLWebpackPlugin = require("html-webpack-plugin");
const ASSET_PATH = process.env.ASSET_PATH || '/';
module.exports = {
  mode: "none",
  entry: {
    jquery: "./src/js/jquery.min.js",
    main: "./src/js/app.js",
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
        use: ["style-loader", "css-loader", "sass-loader"],
      },
      {
        test: /\.html$/,
        use: ["html-loader"]
      },
    ],
  },
};