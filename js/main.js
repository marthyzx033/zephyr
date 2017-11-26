$(function() {
	
    var rapport;
    var scroll = 0;
    var arrLeft = [3,22,37,68,83];
    var h = [10,23,10,23,10];// ce tableau correspond au valeur "top" de nav li dans le fichier less - A changer si le fichier less change
    var lastScrollTop = 0;
    var sens;

    function sensScroll(){
         var st = $(this).scrollTop();
        if (st > lastScrollTop){
       sens= -1;
         }
        else if(st == lastScrollTop)
        {
        sens=0;
        }
        else {

       sens= 1;
        }
        lastScrollTop = st;
    }
    sensScroll();
    function placeMenu(){ 
            $('nav a').each(function(){
                var gauche = $(this).parent().offset().left;
                var ind = $(this).parent().index();
                var hauteur = $(window).height()*h[ind]/100;
            
                if(!$(this).parent().hasClass('fixed') && ($(this).parent().offset().top < $(window).scrollTop() + 30) && sens ==-1)
                {  
                            $(this).parent().addClass('fixed').css(
                            { 'left': gauche });
                }
                else if($(this).parent().hasClass('fixed') && ($(this).parent().offset().top < hauteur) && sens == 1)
                    {   
                        $('.backNav').removeClass('fixed');
                        $(this).parent().removeClass('fixed').css("left",arrLeft[ind]+'%');
                     
                       console.log('come1');
                    }
                else if(sens==0 && $("#contactMenu").offset().top < $(window).scrollTop())
                {
                    $(this).parent().addClass('fixed').css(
                            { 'left': gauche });
                }
            });
        
    }
    function fixVerif()
        {   var compte = 0;
            var retour = false;
            $('nav li').each(function(){
            if($(this).hasClass('fixed'))
                { compte++; }
            if(compte==5)
                {retour = true;}
            else 
                {retour = false;}
            });
            return retour;
        }
    function noFixVerif()
        {   var compte = 0;
            var retour = false;
            $('nav li').each(function(){
            if(!$(this).hasClass('fixed'))
                { compte++; }
            if(compte==5)
                {retour = true;}
            else 
                {retour = false;}
            });
            return retour;
        }
    function alignListe()
        {
            var tailleListe = $('.refTailleListe').offset().top - $('.liste').offset().top;
          
        }
    /******************************************************************************************************/
                                    /* INIT */
    /******************************************************************************************************/
     placeMenu();
     alignListe();

     /******************************************************************************************************/
                                    /* RESIZE */
    /******************************************************************************************************/

    $(window).on('resize', function(){
          var tailleListe = $('.refTailleListe').offset().top - $('.liste').offset().top;
          //console.log(tailleListe+'ok');
          alignListe()
         $('nav a').each(function(){
         });
    });
    
 /******************************************************************************************************/
                                    /* CLICK MENU */
/******************************************************************************************************/
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('.page-scroll a').removeClass('selected');
        $(this).addClass('selected');
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 100
        }, 1000);
       $('nav a').addClass('over');
        event.preventDefault();
    });
    $(document).on('click', '#presentation .close', function(){
            $('.presentation').slideUp(800);
            $('html, body').animate({
            scrollTop: ($('#portfolio').offset().top - 100)
        }, 500);
    });

    $('#portfolio .menuPortfolio li a').on('click', function(e){
        e.preventDefault();
           if(!$(this).parent().hasClass('selected'))
           {
             var dataCat = $(this).data('categorie');
            $('#portfolio .menuPortfolio li a').parent().removeClass('selected');
            $(this).parent().addClass('selected');
             $('#portfolio .liste').fadeOut(400, function(){
                $('#portfolio .liste ul').load('includes/liste.php', {categorie:''+dataCat+''},function(){
                        $('.presentation').load('includes/presentation.php', {categorie:''+dataCat+'', ref:0}, function(){
                         $('#portfolio .liste').fadeIn();
                        });
                 });
             });
           }    
    });
     // Clic sur les vignettes du portfolio
    $(document).on('click','#liste li', function(e){
         e.preventDefault();
         var categ = $(this).data('categorie');
         var ref = $(this).data('num');
         if(!$(this).hasClass('catSelected'))
         {  $('#liste li').removeClass('catSelected');
            $(this).addClass('catSelected');
            $('.presentation').load('includes/presentation.php', {categorie:''+categ+'', ref:''+ref+''}, function(){
                 $(this).slideDown(800);
                 $('html, body').animate({
                scrollTop: ($('.presentation').offset().top - 100)
                }, 500);
                 //categoriSelected
             });
        }
    });
    //get the offset top of the element
 /******************************************************************************************************/
                                    /* SCROLL */
/******************************************************************************************************/
    $(window).on('scroll', function(){
        sensScroll();
    	logoGauche = $('h1').offset().left;
    	if($('h1').offset().top < $(window).scrollTop()-250)
    		{ $('.logo').removeClass('hidden');}
        else{$('.logo').addClass('hidden');}
        if($('.ombre').offset().top < $(window).scrollTop()+100)
            {   $('.ombre').addClass('hidden');
                $('.backNav').addClass('fixed').removeClass('hidden');
            }
        else
            { $('.backNav').addClass('hidden'); $('.ombre').removeClass('hidden');}
    	// sticky menu
    	placeMenu();
        if($('.ancre:eq(4)').offset().top < ($(window).scrollTop()+220))
        {   $('.page-scroll a').removeClass('selected');
            $('.page-scroll:eq(4) a').addClass('selected');
        }
        else if($('.ancre:eq(3)').offset().top < ($(window).scrollTop()+150))
        {   $('.page-scroll a').removeClass('selected');
            $('.page-scroll:eq(3) a').addClass('selected');
        }
        else if($('.ancre:eq(2)').offset().top < ($(window).scrollTop()+170))
        {   $('.page-scroll a').removeClass('selected');
            $('.page-scroll:eq(1) a').addClass('selected');
           //console.log('portfolio');
        }
        else if($('.ancre:eq(1)').offset().top < ($(window).scrollTop()+150))
        {   $('.page-scroll a').removeClass('selected');
             //console.log('competence');
            $('.page-scroll:eq(0) a').addClass('selected');
        }
        else if($('.ancre:eq(0)').offset().top < ($(window).scrollTop()+150))
        {   $('.page-scroll a').removeClass('selected');
        }
    });
    
    /******************************************************************************************************/
                                    /* TIME INTERVAL FEATHER */
/******************************************************************************************************/

    var comptePlume = 0;
    var compteGlobal = 1;
    var compteMax=0;
    var disparitionPlume = setInterval(function(){ dispairPlume() }, 500);
    var rand, rand2=0;
    var go=true;
    function dispairPlume(){
        compteMax++;

        rand3 = ((compteGlobal-2)%12==0)?compteGlobal:0; // flip
        //console.log(rand3+' '+compteGlobal);
        if(compteMax < 4)
        {go=true;}
        else if(compteMax<8) {go=false;}
        else{compteMax=0}

        if(go==true)
         {
            if(compteGlobal%3==1 )
                { rand = Math.random()*90;// left
                  rand2 = Math.random()*25; // top
                  //console.log(rand2);
                    if(Math.floor(rand2)<8) {var echelle = 'scale3';}
                    else if(Math.floor(rand2)<16){var echelle = 'scale2';}
                    else{var echelle = 'scale1';}

                  $('.plume').not('.stayPlume').css('left',rand+'%').alterClass('scale*').addClass(echelle);
                }
            if(compteGlobal == 4){ $('.plume').not('.stayPlume').css('left','80%');}
            // $('nav li:eq('+(compteGlobal-1)+') a').addClass('over');

        	 if(comptePlume < 3)
        	 	{   $('.plume').not('.last').addClass('dispPlume');
                    $('.last').addClass('dispPlume');
                    $('.plume:eq('+comptePlume+')');
                    //$('nav li:eq('+comptePlume+') a').addClass('over');
                }
                    $('.plume:eq('+comptePlume+')').removeClass('dispPlume');
                    $('.stayPlume').removeClass('dispPlume');

            if(compteGlobal%3==2 && compteGlobal != 1)
             { 
               //console.log('okParenthese');
                if(compteGlobal == rand3)// flip plume
                {    $('.last:last-child').addClass('stayPlume').css('top',65+rand2+'%');
                    $('.last:last-child').clone().removeClass('stayPlume').find('img').attr('src','images/plume_flip.png').parent().appendTo('.illustrationAccueil');
                    //console.log('okFlip');
                }
                else
                {    $('.last:last-child').addClass('stayPlume').css('top',65+rand2+'%');
                      $('.last:last-child').clone().removeClass('stayPlume').find('img').attr('src','images/plume_reflet.png').parent().appendTo('.illustrationAccueil');
                console.log(65+rand2);
                }
             }
           
            comptePlume++;
       		compteGlobal++;
             if(comptePlume ==  3)
                {comptePlume = 0;}
            if(compteGlobal ==46)
            {clearInterval(disparitionPlume);}
        }
    }


});