// loop banner
$(document).ready(function (){

    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1

    });

    // top-sale
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        }
    });

    // isotope filter
    var $grid=$(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        price: '.price parseFloat'
    });


    // brand click filter
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    })

    // $(".form-control").ready( function() {
    //     // init Isotope
    //     var $grid = $('.grid').isotope({
    //         getSortData: {
    //             price: '.price parseFloat',
    //             weight: function( itemElem ) {
    //                 var weight = $( itemElem ).find('.weight').text();
    //                 return parseFloat( weight.replace( /[\(\)]/g, '') );
    //             }
    //         }
    //     });
    //
    //     $('#price-sort').on( 'change', function() {
    //         var type = $(this).find(':selected').attr('data-sorttype');
    //         console.log(type);
    //         var sortValue = this.value;
    //         if(type=='ass'){$grid.isotope({ sortBy: sortValue , sortAscending: false});}
    //         else{$grid.isotope({ sortBy: sortValue , sortAscending: true});}
    //         $grid.isotope({ sortBy: sortValue });
    //     });
    //
    //
    //     // change is-checked class on buttons
    //     $('#price-sort').on( 'change', function() {
    //         var sortByValue = this.value;
    //         console.log(sortByValue);
    //         $grid.isotope({ sortBy: sortByValue});
    //     });

    // promotion owl carousel
    $("#promotion .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });


    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })

    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "Template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseFloat(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseFloat($deal_price.text()) + parseFloat(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseFloat(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseFloat($deal_price.text()) - parseFloat(item_price);
                        $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty down button


});