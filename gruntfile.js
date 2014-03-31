module.exports = function(grunt){

    "use strict";
   require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            build: {
                options: {
                    banner: '/* I LOVE PPE */'
                },
                files: {
                    'static/css/iloveppe.min.css': [
                        'build/foundation/css/normalize.css',
                        'build/foundation/css/foundation.css',
                        'build/icomoon/style.css',
                        'build/css/google-fonts.css',
                        'build/tmp/iloveppe.css'
                    ]
                }
            }
        },

        sass: {
            build: {
                files: {
                    'build/tmp/iloveppe.css': 'build/scss/master.scss'
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
                    'build/tmp/iloveppe_common.min.js': [
                        'build/foundation/js/vendor/modernizr.js',
                        'build/foundation/js/vendor/jquery.js',
                        'build/foundation/js/vendor/fastclick.js',
                        'build/js/foundation/foundation.js',
                        'build/sharrre/jquery.sharrre.js',
                    ],
                    'static/js/iloveppe_blog.min.js': [
                        'build/tmp/iloveppe_common.min.js',
                        'build/js/ilppe_blog.js'
                    ],
                    'static/js/iloveppe.min.js': [
                        'build/tmp/iloveppe_common.min.js',
                        'build/js/ilppe.js'
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
            sharrre: {
                files: [
                    {
                        src: 'build/sharrre/sharrre.php',
                        dest: 'blog/wordpress/wp-content/themes/iloveppe/vendor/sharrre.php'
                    },
                    {
                        src: 'build/sharrre/sharrre.php',
                        dest: 'app/public/vendor/sharrre.php'
                    }
                ]
            },
            icomoon: {
                files: {
                    src: 'build/icomoon/fonts/*.*',
                    dest: 'static/css/fonts/'
                }
            }
        },

    });

    grunt.registerTask('buildcss', ['sass', 'cssmin']);
    grunt.registerTask('buildjs', ['uglify']);
    grunt.registerTask('lang', ['pot', 'po2mo', 'copy']);
    grunt.registerTask('heave', ['buildjs', 'buildcss', 'lang', 'replace']);
    grunt.registerTask('default', []);

};