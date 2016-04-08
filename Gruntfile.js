// copy a post from golaravel 
module.exports = function(grunt) {  
  //配置项
  grunt.initConfig({
    //concat插件配置，用来合并多个文件
    concat: {
      //文件间的分隔符
      options: {
        separator: ';',
      },
      //app是一个任务名，可以随意命名
      app: {
        //将进行的合并项
        src: [
          './public/assets/bower/jquery/dist/jquery.js',
          './public/assets/bower/datatables/media/js/jquery.dataTables.min.js',
          './public/assets/bower/datatables/media/js/dataTables.bootstrap.min.js',
          './public/assets/bower/bootstrap/dist/js/bootstrap.js',
          './public/assets/bower/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js',
          './public/assets/bower/metisMenu/dist/metisMenu.min.js',
          './public/assets/js/base.js',
        ],
        //合并后放置在
        dest: './public/assets/js/javascript.js',
      },
    },
    //css合并压缩
    cssmin: {
      //任务名
      app: {
        src: [
          './public/assets/bower/bootstrap/dist/css/bootstrap.css',
          './public/assets/bower/font-awesome/css/font-awesome.css',
          './public/assets/bower/datatables/css/dataTables.bootstrap.css',
          './public/assets/css/base.css',
          './public/assets/bower/metisMenu/dist/metisMenu.min.css',
          './public/assets/bower/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css'
        ],
        dest: './public/assets/css/stylesheet.css'
      }
    },
    //js压缩
    uglify: {
      options: {
        mangle: false //是否混合变量，如果需求的话置为true
      },
      app: {
        files: {
          './public/assets/js/javascript.js': './public/assets/js/javascript.js',
        }
      },
    },
    //移动文件
    copy: {
      app: {
        files: [
          {
            expand: true,
            flatten: true,
            cwd: './public/assets/bower/font-awesome/fonts/',
            src: ['**'], 
            dest: './public/assets/fonts/', 
            filter: 'isFile'
          },
          {
            expand: true,
            flatten: true,
            cwd: './public/assets/bower/datatables.net-dt/images',
            src: ['**'], 
            dest: './public/assets/images/', 
            filter: 'isFile'
          },
          {
            expand: true,
            flatten: true,
            cwd: './public/assets/bower/datatables-plugins/i18n',
            src: ['**'], 
            dest: './public/assets/i18n/', 
            filter: 'isFile'
          },
        ]
      }
    },
    //监听文件变化，如果文件变化，将重新进行任务
    watch: {
      app: {
        files: [
          './public/assets/bower/jquery/dist/jquery.js',
          './public/assets/bower/bootstrap/dist/js/bootstrap.js',
          './public/assets/bower/bootstrap/dist/css/bootstrap.css',
          './public/assets/css/base.css',
          './public/assets/js/base.js'
        ],   
        //文件变化后执行哪些任务
        tasks: ['concat:app','uglify:app','cssmin:app','copy:app'],
        options: {
          livereload: true
        }
      }
    }
  });

  //导入所需的插件
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  //注册两个任务
  grunt.registerTask('watch', ['watch']);
  grunt.registerTask('default', ['concat:app','uglify:app','cssmin:app','copy:app']);
};