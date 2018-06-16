var webpack = require('gulp-webpack').webpack
var path = require('path')                               

console.log(__dirname)

module.exports = {     

  entry:{
    app: './app/assets/coffee/main.coffee'
  },

  output:{filename: 'main.js'},
    //出力するファイル名                                       
  resolve: {                                                  
    extensions: ['', '.js', '.coffee'], //requireする際に、拡張子を省略するための設定                        
    root: path.join(__dirname, './app/assets/coffee/**/*.coffee'), //require時にファイルを検索する際のrootパス               
  },
  module:{
    loaders: [                                           
      {test: /\.coffee$/, loader: 'babel-loader!coffee-loader'},//coffeescriptをコンパイルするための設定
    ],
    options: {
      presets: ['es2015']
    }
  },
  plugins: [
      // new webpack.optimize.UglifyJsPlugin(),
  ]
}