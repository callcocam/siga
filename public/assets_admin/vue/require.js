
var require = (function () {
    var cache = {};
    function loadScript(url) {
        var xhr = new XMLHttpRequest(),
            fnBody;
        xhr.open('get', url, false);
        xhr.send();
        if (xhr.status === 200 && xhr.getResponseHeader('Content-Type') === 'application/x-javascript') {
            fnBody = 'var exports = {};\n' + xhr.responseText + '\nreturn exports;';
            cache[url] = (new Function(fnBody)).call({});
        }
    }
    function resolve(module) {
        //TODO resolve urls
        return module;
    }
    function require(module) {
        var url = resolve(module);
        if (!Object.prototype.hasOwnProperty.call(cache, url)) {
            loadScript(url);
        }
        return cache[url];
    }
    require.cache = cache;
    require.resolve = resolve;
    return require;
}());