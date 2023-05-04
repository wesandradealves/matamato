const HTMLWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  entry: {
    main: "./src/js/app.js",
    vendor: "./src/js/vendor.js",
  },
  plugins: [
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
        use: ["html-loader"],
      },
    ],
  },
};