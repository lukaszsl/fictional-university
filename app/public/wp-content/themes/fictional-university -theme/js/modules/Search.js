import $ from 'jquery';

class Search {
	// create and describe object
	constructor() {
		this.openButton = $(".js-search-trigger");
		this.closeButton = $(".search-overlay__close");
		this.searchOverlay = $(".search-overlay");
		this.events();
	}
	// events
	events() {
		this.openButton.on("click", this.openOverlay.bind(this));
		this.closeButton.on("click", this.closeOverlay.bind(this));
	}

	// methods
	openOverlay() {
		this.searchOverlay.addClass("search-overlay--active");
	}

	closeOverlay() {
		this.searchOverlay.removeClass("search-overlay--active");
	}

}

export default Search;
