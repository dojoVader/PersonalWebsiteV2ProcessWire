var ProjectWebsite = {
    smoothScroll: function () {
        // Register the binding for the anchor link
        $('a').on('click', function (e) {
            console.log(this);
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({

                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    console.log(hash);
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });

            }
        });
    },
};



$(document).ready(function () {

    ProjectWebsite.smoothScroll();
    var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: 'onLeave',
            duration: "200%" // this works just fine with duration 0 as well
            // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
            // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
        }
    });

    // get all slides
    var slides = document.querySelectorAll("section.full-view");

    // create scene for every slide
    for (var i = 0; i < slides.length; i++) {
        new ScrollMagic.Scene({
            triggerElement: slides[i]
        })
            .setPin(slides[i], { pushFollowers: ((i % 2) === 0 ? true : false) })
            //.addIndicators()
            .addTo(controller);
    };

    // Create the FeatureComponent
    var FeaturedProject = new Vue({
        delimiters: ['${', '}'],
        el: '#project-page',
        data: {
            projects: {
                data: [],
                length: 0,
                currentIndex: 0,
                currentProject: null
            },

        },
        methods: {
            getProjects: function () {
                this.$http.get('./featured-projects/').then(function (response) {
                    this.update("data", response.body);
                    this.update('length', response.body.length);
                    this.initialize();
                }, function (error) {
                    console.log(error);
                });
            },
            initialize: function () {
                //Check that the project has lists to be rendered
                if (this.projects.data.length > 0) {
                    var currentObjectValue = this.projects.data[0];
                    this.update("currentProject", currentObjectValue);
                }
            },
            update: function (key, value) {
                return this.$set(this.projects, key, value);
            },
            indexUpdate: function (index) {
                var currentObjectValue = this.projects.data[index];
                this.update("currentProject", currentObjectValue);
                this.update("currentIndex",index);
       
            },
            next: function (event) {
                event.preventDefault();
                var currentIndex = this.projects.currentIndex;
                var length = this.projects.data.length;
                if (currentIndex < length) // Zero based)
                {
                    this.update("currentIndex", currentIndex++);
                    this.indexUpdate(currentIndex);

                }
            },
            prev: function () {
                event.preventDefault();
                var currentIndex = this.projects.currentIndex;
                var length = this.projects.data.length;
                if (currentIndex > 0) // Zero based)
                {
                    this.update("currentIndex", currentIndex--);
                    this.indexUpdate(currentIndex);

                }
            }

        },
        mounted: function () {
            this.getProjects();
        }
    });


});

