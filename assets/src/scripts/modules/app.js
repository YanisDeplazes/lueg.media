/* eslint-disable import/default */
import LocomotiveScroll from 'locomotive-scroll';
/* eslint-enable import/default */

/* global navigator */

class App {
	constructor() {
		this.init();
		this.hover();
	}

	init() {
		const app = this; // Reference to the App instance
		function isTouchDevice() {
			return (
				'ontouchstart' in window ||
				navigator.maxTouchPoints > 0 ||
				navigator.msMaxTouchPoints > 0
			);
		}

		// Initialize Locomotive Scroll with conditional smooth scrolling
		document.addEventListener('DOMContentLoaded', function () {
			const scrollContainer = document.querySelector(
				'[data-scroll-container]'
			);

			if (!isTouchDevice()) {
				// eslint-disable-next-line no-unused-vars
				app.scrollInstance = new LocomotiveScroll({
					el: scrollContainer,
					smooth: true,
				});
			} else {
				// eslint-disable-next-line no-unused-vars
				app.scrollInstance = new LocomotiveScroll({
					el: scrollContainer,
				});
			}

			// Initialize dimensions
			let lastWidth = scrollContainer.offsetWidth;
			let lastHeight = scrollContainer.offsetHeight;

			app.setupLocomotiveScroll(scrollContainer);

			// Set up a periodic check (e.g., every 500 milliseconds)
			setInterval(() => {
				const currentWidth = scrollContainer.offsetWidth;
				const currentHeight = scrollContainer.offsetHeight;

				// Check if dimensions have changed
				if (
					currentWidth !== lastWidth ||
					currentHeight !== lastHeight
				) {
					// Update the scroll instance
					app.scrollInstance.update();

					// Update last known dimensions
					lastWidth = currentWidth;
					lastHeight = currentHeight;
				}
			}, 500); // Adjust interval as needed

			if (document.getElementById('scrollToProjects')) {
				document
					.getElementById('scrollToProjects')
					.addEventListener('click', function () {
						app.scrollInstance.scrollTo('#projects'); // Use the scrollInstance from the App class
					});
			}
		});
	}

	hover() {
		document.addEventListener('DOMContentLoaded', function () {
			// Function to change background color of .project-image-wrapper a
			const changeBackgroundColor = function (element, color) {
				// Traverse up to the parent .type-post element
				const typePost = element.closest('.type-post');
				if (typePost) {
					// Find the .project-image-wrapper a within the .type-post
					const projectImageLink = typePost.querySelector(
						'.project-image-wrapper a'
					);
					// Proceed only if .project-image-wrapper a exists
					if (projectImageLink) {
						// Change the background color
						projectImageLink.style.backgroundColor = color;
					}
				}
			};

			// Select all .permalink elements and the <a> within .entry-title
			const hoverElements = document.querySelectorAll(
				'a.permalink, .entry-title a, .project-image-wrapper a'
			);

			// Proceed only if hover elements exist
			if (hoverElements.length > 0) {
				// Add event listeners for each element
				hoverElements.forEach(function (element) {
					// Mouse enter
					element.addEventListener('mouseenter', function () {
						changeBackgroundColor(this, 'rgba(210, 59, 47, 0.5)'); // Adjust the color and opacity as needed
					});

					// Mouse leave
					element.addEventListener('mouseleave', function () {
						changeBackgroundColor(this, 'rgba(210, 59, 47, 0)'); // Revert to original color
					});
				});
			}
		});
	}
}

export default App;
