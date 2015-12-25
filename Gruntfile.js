module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-ng-annotate');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-newer');

    // Do grunt-related things in here
    grunt.initConfig({
        sass: {
            options: {
                style: 'compressed'
            },
            dist: {
                files: {
                    'src/Assets/screen.css': 'src/Assets/sass/screen.scss',
                }
            }
        },
        concat: {
            editor: {
                src: [
                    'src/Assets/javascripts/vendor/core/*.js'
                ],
                dest: 'src/Assets/js/editor.js',
            }
        },
        /**
         * Annotate all angular functions.
         */
        ngAnnotate: {
            options: {
                singleQuotes: true,
            },
            editor: {
                files: {
                    'src/Assets/js/editor.annotated.js': ['src/Assets/js/editor.js'],
                },
            },
        },
        /**
         * Uglify all the JS code
         */
        uglify: {
            editor: {
                files: {
                    'src/Assets/js/editor.min.js': ['src/Assets/js/editor.annotated.js']
                }
            }
        },
        
    });

    grunt.registerTask('default', ['concat', 'ngAnnotate', 'uglify', 'sass',]);

};