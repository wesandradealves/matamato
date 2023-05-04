var webpack = require('webpack')
const HTMLWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  mode: "none",
  entry: {
    jquery: "./src/js/jquery.min.js",
    main: "./src/js/app.js",
    vendor: "./src/js/vendor.js",
  },
  plugins: [
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