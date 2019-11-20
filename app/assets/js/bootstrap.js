'use strict';

import * as $ from 'jquery';
import { toggleFlyerSelection , initializeUI , registerEventListeners } from './components/flyers';
import { modalUpdate } from './components/modals';


$(document).ready(function () {
	initializeUI();
	registerEventListeners($('body'), [
        {
            event: 'mouseenter mouseleave',
            selector: '.gallery-cell',
            handler: toggleFlyerSelection,
        },
    ])
})
modalUpdate();