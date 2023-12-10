// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles
parcelRequire = (function (modules, cache, entry, globalName) {
  // Save the require from previous bundle to this closure if any
  var previousRequire = typeof parcelRequire === 'function' && parcelRequire;
  var nodeRequire = typeof require === 'function' && require;

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire = typeof parcelRequire === 'function' && parcelRequire;
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error('Cannot find module \'' + name + '\'');
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = cache[name] = new newRequire.Module(name);

      modules[name][0].call(module.exports, localRequire, module, module.exports, this);
    }

    return cache[name].exports;

    function localRequire(x){
      return newRequire(localRequire.resolve(x));
    }

    function resolve(x){
      return modules[name][1][x] || x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [function (require, module) {
      module.exports = exports;
    }, {}];
  };

  var error;
  for (var i = 0; i < entry.length; i++) {
    try {
      newRequire(entry[i]);
    } catch (e) {
      // Save first error but execute all entries
      if (!error) {
        error = e;
      }
    }
  }

  if (entry.length) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(entry[entry.length - 1]);

    // CommonJS
    if (typeof exports === "object" && typeof module !== "undefined") {
      module.exports = mainExports;

    // RequireJS
    } else if (typeof define === "function" && define.amd) {
     define(function () {
       return mainExports;
     });

    // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }

  // Override the current require with this new one
  parcelRequire = newRequire;

  if (error) {
    // throw error from earlier, _after updating parcelRequire_
    throw error;
  }

  return newRequire;
})({"js/lower/components/category-tabs.ts":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});

var categoryTabs = function categoryTabs() {
  // var categoryList = document.querySelectorAll('.js-category');
  // var newsContainer = document.querySelectorAll('.js-news-container');
  // var newsItemLists = document.querySelectorAll('.js-news-item');
  // categoryList[0].classList.add('is-active');
  // newsContainer[0].classList.add('active');
  // categoryList.forEach(function (category) {
  //   category.addEventListener('click', function () {
  //     var target = category.getAttribute('data-target');
  //     categoryList.forEach(function (category) {
  //       category.classList.remove('is-active');
  //     });
  //     category.classList.add('is-active');
  //     newsItemLists.forEach(function (item) {
  //       item.style.display = 'none';
  //     });
  //     if (target === 'new') {
  //       newsContainer[0].classList.add('active');
  //       newsContainer[1].classList.remove('active');
  //       var allNewsItems = newsContainer[0].querySelectorAll('.js-news-item');
  //       allNewsItems.forEach(function (item) {
  //         item.style.display = 'flex';
  //       });
  //     } else {
  //       newsContainer[0].classList.remove('active');
  //       newsContainer[1].classList.add('active');
  //     }
  //     var targetCategory = document.getElementsByClassName(target);
  //     if (targetCategory.length > 0) {
  //       for (var i = 0; i < targetCategory.length; i++) {
  //         targetCategory[i].style.display = 'flex';
  //       }
  //     }
  //   });
  // });
};
exports.default = categoryTabs;
},{}],"js/lower/components/test.ts":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
/**
 * Test comment
 */
var test = function test() {
  console.log('lower');
};
exports.default = test;
},{}],"js/lower/components/toggler.ts":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
var toggler = function toggler() {
  var header = document.querySelector(".js-header");
  var html = document.querySelector(".js-html");
  if (header) {
    var toggle = header.querySelector(".js-toggler");
    if (toggle) {
      toggle.addEventListener("click", function () {
        header.classList.toggle("is-active");
        if (header.classList.contains("is-active")) {
          html.style.overflowY = "hidden";
        } else {
          html.style.overflowY = "visible";
        }
      });
      header.addEventListener("mouseleave", function () {
        header.classList.remove("is-active");
        html.style.overflowY = "visible";
      });
    }
  }
};
exports.default = toggler;
},{}],"js/lower/index.ts":[function(require,module,exports) {
"use strict";

var __importDefault = this && this.__importDefault || function (mod) {
  return mod && mod.__esModule ? mod : {
    "default": mod
  };
};
Object.defineProperty(exports, "__esModule", {
  value: true
});
var category_tabs_1 = __importDefault(require("./components/category-tabs"));
var test_1 = __importDefault(require("./components/test"));
var toggler_1 = __importDefault(require("./components/toggler"));
document.addEventListener('DOMContentLoaded', function () {
  (0, test_1.default)();
  (0, toggler_1.default)();
  (0, category_tabs_1.default)();
}, false);
},{"./components/category-tabs":"js/lower/components/category-tabs.ts","./components/test":"js/lower/components/test.ts","./components/toggler":"js/lower/components/toggler.ts"}]},{},["js/lower/index.ts"], null)
//# sourceMappingURL=/js/lower/index.js.map