/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            
        { 
            name : 'Big', 
            element : 'big' 
        },
        
        { name : 'Small', 
            element : 'small' 
        },
    
        { 
            name : 'Cited Work (Author)', 
            element : 'cite' 
        },
    
        {
            name: 'Image - Right', 
            element: 'img', 
            attributes: { 'class': 'image-right'  }
        },
    
        {
            name: 'Image - Left', 
            element: 'img', 
            attributes: { 'class': 'image-left'  }
        }
            
    ]);
}