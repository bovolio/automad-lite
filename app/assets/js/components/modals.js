'use strict';

import * as $ from 'jquery';


export function modalUpdate(){
    $('.bd-example-modal-xl').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) // Button that triggered the modal
        var imageSrc = button.data('image');
        var modalTitle = button.data('title');
        var modal = $(this);

        modal.find('.modal-img').attr("src" , imageSrc)
        modal.find('.print-btn').attr("href" , imageSrc.replace(".jpg", ".pdf"))
        modal.find('.modal-title').text(modalTitle);
      })
}

