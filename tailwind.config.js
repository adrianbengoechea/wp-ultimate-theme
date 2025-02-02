module.exports = {
  content: [
    "./**/*.vue",
    "./**/*.php",
  ],
  theme: {
      extend: {},
  },
  plugins: [],
  purge: [
    "./**/*.vue",
    "./**/*.php",
    
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
}