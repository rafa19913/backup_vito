( function( api ) {

	// Extends our custom "digihigh-lite" section.
	api.sectionConstructor['digihigh-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );