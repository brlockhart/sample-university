import $ from 'jquery';

class Search {
    // 1. constructor is where we describe and create/inintiate our object
    constructor() {
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.events();
    }
    // 2. events (an example of an event is when the search icon gets clicked on. or when the cancel "x" gets clicked to exit the search overlay)
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
    }

    // 3. methods (a method is basically a function in js)
    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
    }
}
export default Search