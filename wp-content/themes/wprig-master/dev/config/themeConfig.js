'use strict';

module.exports = {
	theme: {
		slug: 'wprig',
		name: 'wprig',
		author: 'Nguyen Duc Trung'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'meiji.local',
			bypassPort: '8080'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: true, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
