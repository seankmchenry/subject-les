'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        //'assets/js/*.js',
      ]
    },
    sass: {
      // http://goo.gl/K45kWw
      options: {
        // https://github.com/sass/node-sass/issues/337
        //sourceComments: 'map',
        outputStyle: 'compressed'
      },
      dist: {
        files: {
          'assets/css/main.min.css' : [
            'assets/sass/main.scss'
          ]
        }
      }
    },
    watch: {
      sass: {
        files: [
          'assets/sass/bootstrap/*.scss',
          'assets/sass/*.scss',
        ],
        tasks: ['sass']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint']
      },
      livereload: {
        // http://goo.gl/TTGV6E
        options: {
          livereload: true
        },
        files: [
          'assets/css/*.css',
          'page-templates/*.php',
          'templates/*.php',
          '*.php',
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
