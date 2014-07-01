/**
 * Main
 */

var $ = require('jquery')
  , nav = require('./navigate.js');
require('./jquery.serializeObject.js');

// Capture form sending
$(document).on('submit', '.js-form', submitHandler);

// Mark field as correct
$(document).on('blur', '.js-input', function () {
  var $this = $(this);

  if (validField($this.val())) {
    $this.closest('.js-form-row').removeClass('error');
  }
});

// Listen history navigation
$(window).on('popstate', function (e) {
  var formData = $('.js-form').serializeObject()
    , state = e.originalEvent.state;

  $.when(nextStep(location.href, formData))
    .done(function () {
      restoreForm(state);
    });
});

/**
 * Form submit handler
 * @param {Object} e jQuery event
 */
function submitHandler(e) {
  var formData = $(this).serializeObject();

  e.preventDefault();

  if (formValid(formData)) {
    $.when(sendRegisterData(formData))
      .then(function (res) {
        nextStep(res.url, formData);
      }, function (err) {
        console.error(err.responseText);
      });
  }
}

/**
 * Send form data to server
 * @param  {Object} data User registration data
 * @return {Object}      jQuery ajax
 */
function sendRegisterData(data) {
  return $.ajax({
    url: 'register.php',
    data: data,
    type: 'POST',
    dataType: 'JSON'
  });
}

/**
 * Go to next registration step
 * @param  {String} url  Next page URL
 * @param  {Object} data Form data
 * @return {Object}      jQuery ajax
 */
function nextStep(url, data) {
  return nav.go({
    state: data,
    title: document.title,
    url: url
  }).done(function (res) {
    $('.js-wizard').replaceWith($(res).find('.js-wizard'));
  });
}

/**
 * Check form validity
 * @param  {Object}  data Form data
 * @return {Boolean}      Form validity
 */
function formValid(data) {
  var valid = true
    , key;

  for (key in data) if (data.hasOwnProperty(key)) {
    if (!validField(data[key])) {
      markInvalidField(key);
      valid = false;
    }
  }

  return valid;
}

function validField(value) {
  return !!value.length;
}

/**
 * Mark invalid inputs
 * @param {String} name Input name
 */
function markInvalidField(name) {
  $('input[name=' + name + ']').closest('.js-form-row').addClass('error');
}

/**
 * Restore form inputs values
 * @param {Object} state Page state
 */
function restoreForm(state) {
  var key;

  for (key in state) if (state.hasOwnProperty(key)) {
    $('input[name=' + key +']').val(state[key]);
  }
}
