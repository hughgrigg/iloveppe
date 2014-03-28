module.exports = function(grunt){

    "use strict";
   require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            build: {
                src: 'static/css/iloveppe.css',
                dest: 'static/css/iloveppe.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'static/css/iloveppe.css': 'build/css/master.scss'
                }
            }
        },

        uglify: {
            options: {
                mangle: {
                    except: ['jQuery']
                }
            },
            build: {
                files: {
                    'static/js/iloveppe_blog.min.js': [
                        'build/js/vendor/jquery.js',
                        'build/js/foundation/foundation.js',
                        'build/js/vendor/jquery.sharrre.min.js',
                        'build/js/ilppe_blog.js'
                    ]
                }
            }
        },

        po2mo: {
            files: {
                expand: true,
                cwd: 'build/languages/po/',
                src: '**/*.po',
                dest: 'build/languages/mo/',
            },
        },

        pot: {
            options:{
                text_domain: 'ilppe', //Your text domain. Produces my-text-domain.pot
                dest: 'build/languages/pot/', //directory to place the pot file
                encoding: 'UTF-8',
                keywords: [ //WordPress localisation functions
                    '__:1',
                    '_e:1',
                    '_x:1,2c',
                    'esc_html__:1',
                    'esc_html_e:1',
                    'esc_html_x:1,2c',
                    'esc_attr__:1', 
                    'esc_attr_e:1', 
                    'esc_attr_x:1,2c', 
                    '_ex:1,2c',
                    '_n:1,2', 
                    '_nx:1,2,4c',
                    '_n_noop:1,2',
                    '_nx_noop:1,2,3c'
                ],
            },
            files:{
                src:  [ 'blog/wordpress/wp-content/themes/iloveppe/**/*.php' ], //Parse all php files in wordpress theme
                expand: true,
            }
        },

        copy: {
            lang: {
                files: [{
                    flatten: true,
                    expand: true,
                    cwd: 'build/languages/mo/',
                    src: '**/*.mo',
                    dest: 'blog/wordpress/wp-content/languages/themes/',
                    filter: 'isFile'
                }]
            },
        },

        replace: {
            // Copy common top-nav.php file and convert to Wordpress functions
            topnav_wordpress: {
                src: ['build/php/top-nav.php'],
                dest: 'blog/wordpress/wp-content/themes/iloveppe/partials/',
                replacements: [
                    {
                        from: /#trans:([a-z]+\.[a-z]+),(.*?)#/g,
                        to: "<?php _e('$2', 'ilppe') ?>"
                    }
                ]
            },
            topnav_laravel: {
                src: ['build/php/top-nav.php'],
                dest: 'app/app/views/partials/top-nav.blade.php',
                replacements: [
                    {
                        from: /#trans:([a-z]+\.[a-z]+),(.*?)#/g,
                        to: "{{ echo trans('$1') }}"
                    }
                ]
            }
        },

        watch: {
            js: {
                files: ['build/js/**/*.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['build/css/**/*.scss'],
                tasks: ['buildcss']
            }
        },

    });

    grunt.registerTask('buildcss', ['sass', 'cssmin']);
    grunt.registerTask('buildjs', ['uglify']);
    grunt.registerTask('lang', ['pot', 'po2mo', 'copy']);
    grunt.registerTask('heave', ['buildjs', 'buildcss', 'lang', 'replace']);
    grunt.registerTask('default', []);

};