(function(){

    const siteAppID = '#site-app';
    const { createApp, ref } = Vue

    createApp({
      setup() {
        const title = ref('Hello vue!')
        return {
          title
        }
      }
    }).mount( siteAppID )
    
})();