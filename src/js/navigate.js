/**
 * History
 */

var $ = require('jquery');

/**
 * Navigate to given url and save state
 * @param  {Object} data Navigation data
 * @return {Object}      jQuery ajax
 */
function go(data) {
  return $.ajax({
    url: data.url,
    dataType: 'html'
  }).done(function () {
    window.history.replaceState(data.state, document.title, location.href);
    window.history.pushState({}, document.title, data.url);
  }).fail(function (err) {
    console.error(err.responseText);
  });
}

module.exports = {
  go: go
};
