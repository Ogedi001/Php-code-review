
const path = require('path')

const rootdir = path.dirname(process.mainModule.filename)
console.log(rootdir)
module.exports= rootdir