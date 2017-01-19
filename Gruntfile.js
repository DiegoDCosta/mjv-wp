'use strict';
module.exports = function (grunt) {

    grunt.initConfig({

        watch: {
            js: {
                files: [
                    'Gruntfile.js',
                    'js/libs/*.js',
                    'js/script/*.js'
                ],
                tasks: ['uglify', 'clean']
            },
            sass: {
                dist: {
                    files: {
                        'style.css': 'sass/style.scss'
                    },
                    tasks: ['sass', 'cssmin', 'clean']
                }
            },
            cssmin: {
                options: {
                    shorthandCompacting: false,
                    roundingPrecision: -1
                },
                target: {
                    files: {
                        'style.min.css': 'style.css'
                    }
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
     grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // register task
    grunt.registerTask('default', [
        'sass',
        'cssmin',
        'watch',
        'uglify'
    ]);
};