/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),

    connect: {
      server: {
        options: {
          port: 8080,
        }
      }
    },

    // // Task configuration.
    // concat: {
    //   options: {
    //   },
    //   dist: {
    //     src: ['lib/<%= pkg.name %>.js'],
    //     dest: 'dist/<%= pkg.name %>.js'
    //   }
    // },

    // uglify: {
    //   options: {
    //     banner: '<%= banner %>'
    //   },
    //   dist: {
    //     src: '<%= concat.dist.dest %>',
    //     dest: 'dist/<%= pkg.name %>.min.js'
    //   }
    // },

    compass: {
      dist: {
        options: {
          sassDir: 'app/webroot/sass',
          cssDir: 'app/webroot/css',
          raw: 'preferred_syntax = :sass\n' // Use `raw` since it's not directly available
        }
      }
    },

    watch: {
      files: ['app/View/**/*.ctp', 'app/webroot/sass/*.scss'],
      tasks: ['default']
    }

  });

  // These plugins provide necessary tasks.
  // grunt.loadNpmTasks('grunt-contrib-concat');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task.
  grunt.registerTask('default', ['compass', 'watch']);

};