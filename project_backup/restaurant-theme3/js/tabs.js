 /*
  Twitter     : @MichMammoliti
  Github      : @MichaelMammoliti

  Plugin Name : openTabby.js
  Version     : 0.1
  Date        : 2015-09-14

  Released under the GPLv2 license
  https://github.com/MichaelMammoliti/openTabby.js
*/

(function ( $, window, document, undefined )
{   'use strict';
  var pluginName  = "openTabby",
      defaults    = {
        width: 500,
        height: 500,
        responsive: true,
        defSlide: 1,
        cssTransition: "fade",
        defTabText: "Tab",
        accordionView: false,
        accordionDefWidth: undefined,
        jsMode: true
      };

  function Plugin( context, options )
  {
    this.settings   = $.extend({}, defaults, options);
    this.current    = this.settings.defSlide - 1;
    this.timer;

    this.$context   = $(context);
    this.$nav       = undefined;
    this.$slidesContainer    = this.$context.find("." + pluginName + "--slidesContainer");
    this.$slides    = this.$slidesContainer.find("." + pluginName + "--slide");

    this.init();
  }

  Plugin.prototype = {

    init: function()
    {
      var self = this,
          navWidth;

      if( !self.settings.jsMode ) return;

      this.appendTabs();
      this.applyClasses();
      this.handleEvents();
      this.activateSlide();
      this.resizeContainer();
      this.setTransition();
      this.accordion();

    },

    handleEvents: function()
    {
      var self    = this;

      self.$nav.on("click", "li", function(){
        self.clickOnTab( $(this) );
      });

      $(window).resize(function(){
        self.toggleTransition();
        self.resizeContainer();
        self.accordion();
      });
    },

    clickOnTab: function( $el )
    {
      var self    = this,
          index   = $el.index();

      self.current = index;

      self.setTransition();
      self.activateSlide();
      self.resizeContainer();
    },

    applyClasses: function()
    {
      var self      = this;

      $("html").addClass("js");
      if( self.settings.responsive )
        self.$context.addClass("responsive");
      if( self.settings.cssTransition )
        self.$context.addClass("csstransitions");
      if( self.settings.accordionView )
        self.$context.addClass("accordion");
    },

    resizeContainer: function()
    {
      var self  = this, h, w;

      if( self.settings.responsive )
      {
        h = self.$slides.eq(self.current).outerHeight();
        w = "100%";
      }
        else
        {
          w = self.settings.width;
          h = self.settings.height;
          self.$slides.css({ "height": h });
        }
      self.$slidesContainer.css({ "width": w, "height": h });
    },

    activateSlide: function()
    {
      var self              = this,
          index             = self.current,
          className         = "active",
          $slidesContainer  = self.$slides,
          $lis              = self.$nav.find("li");

      $lis.removeClass(className);
      $lis.eq(index).addClass(className);

      $slidesContainer.removeClass(className);
      $slidesContainer.eq(index).addClass(className);
    },

    setTransition: function()
    {
      var self = this,
          fx;

      if( !self.settings.cssTransition ) return;

      fx = "effect-" + self.settings.cssTransition;

      self.$slidesContainer.addClass( fx );
    },

    appendTabs: function()
    {
      var self        = this,
          htmlString  = "",
          template    = "<div class='" + pluginName + "--nav'><ul></ul></div>",
          $template   = $(template).prependTo( self.$context ),
          prefix      = self.settings.tabTextPrefix + " ",
          title,
          i = 0;

      self.$nav = $template;

      $.each( self.$slides, function(){
        i++;
        title             = $(this).data("tab-name") || self.settings.defTabText + " " + i;
        htmlString        += "<li>" + title + "</li>";
      });

      self.$nav.children("ul").append( htmlString );

      self.$nav = $template.children("ul");
    },

    toggleTransition: function()
    {
      var self = this;

      if( !self.settings.cssTransition ) return;

      self.$context.removeClass("csstransitions");

      clearTimeout(self.timer);
      self.timer = setTimeout(function(){
        self.$context.addClass("csstransitions");
      }, 200);
    },

    accordion: function()
    {
      var self = this;

      if( self.settings.accordionView === "always" ) return;

      if( !self.settings.accordionDefWidth )
        self.settings.accordionDefWidth = self.$nav.outerWidth();

      ( self.$context.outerWidth() <= self.settings.accordionDefWidth )
        ? self.settings.accordionView = true
        : self.settings.accordionView = false;

      ( self.settings.accordionView === true )
        ? self.$context.addClass("accordion")
        : self.$context.removeClass("accordion");
    }

  }; // end of Plugin.prototype

  $.fn[pluginName] = function ( options )
  {
      return this.each(function() { new Plugin( this, options ); });
  };

})( jQuery, window, document );