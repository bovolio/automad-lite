'use strict';
import * as $ from 'jquery';

/**
 * Hide, load, animate, etc. all necessary elements
 *
 * @returns {void}
 */
export function initializeUI(){
	$('.centered-btn').addClass('invisible');
}

/**
 * Accepts an array of objects with an event name, CSS selector, and
 * event handler callback to attach to the given element
 *
 * @param {Element} element The element to assign listeners onto
 * @param {array} listeners An array of listener objects in the shape of `{event: string, selector: string, handler: function}`
 * @returns {void}
 */
export function registerEventListeners(element, listeners) {
    for (const listener of listeners) {
        element.on(listener.event, listener.selector, listener.handler)
    }
}

/**
 * Toggle the currently selected card element's state of being hovered
 * or not.
 *
 * @param {Event} event The event being listened on
 * @returns {void}
 */
export function toggleFlyerSelection(event) {
    // console.log(event.target) // the element that is invoking the event
    
    if (!$(this).is('.gallery-cell')) {
        throw new Error('u wot m8?')
	}    
	$(this).find('.img-fluid').toggleClass('shadow-lg hover11')
    $(this).find('.centered-btn').toggleClass('invisible')
}
