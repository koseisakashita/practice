/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	var hoge, main;

	hoge = __webpack_require__(1);

	window.main = window.main || {};

	main = class main {
	  constructor(opt) {
	    this.opt = opt || {};
	    this.hoge = new hoge();
	  }

	  init() {
	    return this.hoge.echo(this.opt);
	  }

	};

	window.main = main;


/***/ }),
/* 1 */
/***/ (function(module, exports) {

	var hoge;

	hoge = class hoge {
	  constructor() {
	    console.log('hogeをインスタンス化したよ');
	  }

	  echo(str) {
	    return console.log(str);
	  }

	};

	module.exports = hoge;


/***/ })
/******/ ]);