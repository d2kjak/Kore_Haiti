jQuery(document).ready( function( $ ) {

    /**
     * SlickNav Mobile Menu
     */
    $( function() { 
        
        $( '#primary-menu' ).slicknav({
            prependTo:'nav.main-nav > div',
            duration: 500,
            openedSymbol: "&#45;",	
            closedSymbol: "&#43;"
            
        }); 
       
    } );
    
    // Custom Slicknav Toggle
    var slicknav_open = false;
    $( "#slicknav-menu-toggle" ).click( function() {
        
        if ( slicknav_open ) {
            
            $("div.slicknav_menu").stop().animate({
                borderColor: "#fff"
            }, 500 );
            $('#primary-menu').slicknav( 'toggle' );
            slicknav_open = false;
            
        } else {
            
            $("div.slicknav_menu").stop().animate({
                borderColor: "#cacaca"
            }, 1000 );
            $('#primary-menu').slicknav( 'toggle' );
            slicknav_open = true;
            
        }
        
    });
    
    /**
     * Main Navigation Hover Effect
     */
    $( 'ul#primary-menu > li.menu-item').mouseenter( function() {
        
        $( this ).find( '> ul' ).stop().slideDown();
        
    }).mouseleave( function() {

        $( this ).find( '> ul' ).stop().slideUp();
    
    });

    /**
     * Categories Widget - Individual Category hover effect
     */
    var primary_color = $('div#site-navigation').css( 'background-color' ),
        category_size = $( '.widget_categories ul li a').css( 'font-size' );
    
    $( '.widget_categories ul li').mouseenter( function() {
        
        if ( $( this ).closest( '#subscribe-module' ).length ) {

            $( this ).find( 'a' ).stop().animate({
                fontSize: '14px',
                borderBottomWidth: '2px',
                borderTopWidth: '2px',
                borderLeftWidth: '2px',
                borderRightWidth: '2px',
                paddingTop: '15px',
                paddingBottom: '15px',
                paddingLeft: '20px'
            }, 200 );
            
        } else {
            
            $( this ).find( 'a' ).stop().animate({
                color: primary_color,
                fontSize: '14px',
                borderBottomWidth: '2px',
                borderTopWidth: '2px',
                borderLeftWidth: '2px',
                borderRightWidth: '2px',
                borderColor: primary_color,
                paddingTop: '15px',
                paddingBottom: '15px',
                paddingLeft: '20px'
            }, 200 );
            
        }
        
    }).mouseleave( function() {
        
        var text_color = null;
        if ( $( this ).closest( '#footer-widget-area' ).length || $( this ).closest( '#subscribe-module' ).length ) {
            text_color = '#f5f5f5';
        } else {
            text_color = '#666';
        }
        
        $( this ).find( 'a' ).stop().animate({
            fontSize: category_size,
            color: text_color,
            borderBottomWidth: '1px',
            borderTopWidth: '1px',
            borderLeftWidth: '1px',
            borderRightWidth: '1px',
            borderColor: '#f5f5f5',
            paddingTop: '7.5px',
            paddingBottom: '7.5px',
            paddingLeft: '10px'
        }, 200 );
        
    });
    
    /**
     * Scroll to Top button in Footer
     */
    $( "#footer-jumper span" ).click( function() {
        $( "html, body" ).animate({ scrollTop: 0 }, 1000 );
    });
    
    /**
     * Contact Form
     */
    $('#juno-contact-form').submit( function (e) {
       
        e.preventDefault();
        
        $('.mail-sent,.mail-not-sent').hide();
       
        var form = $(this);
        var name = $('.name', form ).val();
        var email = $('.email', form ).val();
        var message = $('textarea.message', form ).val();
        var url = form.attr('action');
        
        if( name.length < 2 ) {
            alert( 'Please enter a name' );
            return false;
        }
        
        if( message.length < 2 ) {
            alert( 'Please enter a message' );
            return false;
        }
        
        if( ! junoValidateEmail( email ) ) {
            alert( 'Please enter a valid email address' );
            return false;
        }
        
        var data = {
            
            action : 'juno_send_message',
            name : name,
            email : email,
            message : message
            
        }
        
        $.post( url, data, function ( response ) {
           console.log( response );
            if( response == 1 ) {
                $('.mail-sent').fadeIn(350);
                form[0].reset();
                
            }else{
                $('.mail-not-sent').fadeIn(350);
            }
            
        });
        
        
    });
    
    function junoValidateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
});