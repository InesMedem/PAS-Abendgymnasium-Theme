/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/MobileMenu.js":
/*!***********************************!*\
  !*** ./src/modules/MobileMenu.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class MobileMenu {
  constructor() {
    this.menu = document.querySelector(".site-header__menu");
    this.openButton = document.querySelector(".site-header__menu-trigger");
    this.events();
  }
  events() {
    this.openButton.addEventListener("click", () => this.openMenu());
  }
  openMenu() {
    this.openButton.classList.toggle("fa-bars");
    this.openButton.classList.toggle("fa-window-close");
    this.menu.classList.toggle("site-header__menu--active");
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (MobileMenu);

/***/ }),

/***/ "./css/style.scss":
/*!************************!*\
  !*** ./css/style.scss ***!
  \************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: There is no module with the namespace \"color\".\n   ╷\n46 │     background-color: color.scale($mainBlue, $alpha: -0.11, $lightness: -1%);\n   │                       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n   ╵\n  css/modules/site-header.scss 46:23  @import\n  css/style.scss 13:9                 root stylesheet\n    at tryRunOrWebpackError (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/HookWebpackError.js:86:9)\n    at __webpack_require_module__ (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5299:12)\n    at __webpack_require__ (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5256:18)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5328:20\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at done (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/Hook.js:18:14)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5234:43\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5196:16\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5164:15\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at done (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3527:9)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5110:8\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3531:6\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/HookWebpackError.js:67:2\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:111:20)\n    at ItemCacheFacade.store (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/CacheFacade.js:141:15)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3530:11\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:97:5\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:79:18)\n    at ItemCacheFacade.get (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3498:9)\n    at codeGen (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5098:11)\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5128:14\n    at processQueue (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/util/processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n-- inner error --\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: There is no module with the namespace \"color\".\n   ╷\n46 │     background-color: color.scale($mainBlue, $alpha: -0.11, $lightness: -1%);\n   │                       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n   ╵\n  css/modules/site-header.scss 46:23  @import\n  css/style.scss 13:9                 root stylesheet\n    at Object.<anonymous> (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/css/style.scss:1:7)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:494:10\n    at Hook.eval [as call] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/Hook.js:14:14)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5301:39\n    at tryRunOrWebpackError (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/HookWebpackError.js:81:7)\n    at __webpack_require_module__ (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5299:12)\n    at __webpack_require__ (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5256:18)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5328:20\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at done (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/Hook.js:18:14)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5234:43\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5196:16\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5164:15\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3485:9)\n    at done (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3527:9)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5110:8\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3531:6\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/HookWebpackError.js:67:2\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:111:20)\n    at ItemCacheFacade.store (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/CacheFacade.js:141:15)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3530:11\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:97:5\n    at Hook.eval [as callAsync] (eval at create (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Cache.js:79:18)\n    at ItemCacheFacade.get (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:3498:9)\n    at codeGen (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5098:11)\n    at symbolIterator (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/neo-async/async.js:3463:5)\n    at /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/Compilation.js:5128:14\n    at processQueue (/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/webpack/lib/util/processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n\nGenerated code for /Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!/Users/ines/Local Sites/pas-abendgymnasium/app/public/wp-content/themes/PAS-Abendgymnasium/css/style.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: There is no module with the namespace \\\"color\\\".\\n   ╷\\n46 │     background-color: color.scale($mainBlue, $alpha: -0.11, $lightness: -1%);\\n   │                       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\\n   ╵\\n  css/modules/site-header.scss 46:23  @import\\n  css/style.scss 13:9                 root stylesheet\");");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/style.scss */ "./css/style.scss");
/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/MobileMenu */ "./src/modules/MobileMenu.js");


// Our modules / classes


// Instantiate a new object using our modules/classes
const mobileMenu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_1__["default"]();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map