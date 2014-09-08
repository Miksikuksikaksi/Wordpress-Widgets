/*
*	Toggle ubercoool search
*/jQuery(document).ready(function(e){e(".search-toggle").click(function(){e("#search-container").slideToggle("slow",function(){e(".search-toggle").toggleClass("active")});return!1})});