module.exports = function (grunt) {

    grunt.initConfig({

        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'js/main-min.js': ['js/**/*.js', 'js/*.js']
                }
            }
        }, // uglify



        sass: {
            options: {
                sourceMap: false
            },
            dist: {
                options: {style: 'none'},
                files: {
                    'style.css': 'sass/style.scss'
                }
            }
        }, // sass
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
        },

        watch: {
            dist: {
                files: [
                    'js/**/*',
                    'sass/**/*'
                ],
                tasks: ['uglify', 'sass', 'cssmin']
            }
        } // watch

    });
    // Plugins do Grunt
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Tarefas que serão executadas
    grunt.registerTask('', ['uglify', 'sass', 'cssmin']);
    // Tarefa para Watch
    grunt.registerTask('build', ['watch']);
};