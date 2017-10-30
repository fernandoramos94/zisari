$(document).ready(function() {
	var iconoportada = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYxQkU4QUUzQjY4QjExRTc5NzQ4QzE3QzVDODMxMTQ2IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjYxQkU4QUU0QjY4QjExRTc5NzQ4QzE3QzVDODMxMTQ2Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjFCRThBRTFCNjhCMTFFNzk3NDhDMTdDNUM4MzExNDYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjFCRThBRTJCNjhCMTFFNzk3NDhDMTdDNUM4MzExNDYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7UKnswAAADd0lEQVR42uxYTUtbURCduNFWJSamVkXFzyQtgrjRhUi1SqSICcYP6KYg4o8Q96K40V+gdCUKRXDhRhACJbhSUCtdCArSahIardqIH7md8/DKi/GZl/jSunDgQh5v7p3z5s45M8QkhKCnZBn0xOzJASJcmVx6rLe3931paWkUWx9a8GHfd0ljSAZQX1/fW7vdfr2+vi4S2dramnA4HNf9/f3OtADq6el5XVdXd+nz+YReW1lZEfX19Zf8Ia9SAoSN7e3tQbPZHHcFWVlZIhkwalCZmZlx5+Xm5grE4phWNYaYog6Hw9+6urpsu7u7MUCxIpEINTc3J12jLS0tdH5+Hnfe/v4+IRbH/K6ZLmSGHcS/MsRCTDUGk7p2TCaTSEYoj46OaHl5mfb29uji4oIqKyupra2NbDab7jM4JoCYbp9TARQMBmlkZITm5uaotrY2kp2d/Zv3Xp2dnVm2t7dfut1uGhsbo4KCgqQB3WVZwjRvbm6KkpIS4fF4/FyQ5nukwczvfIWFhWJjYyPheTcxNWmfEEx1dXWUg3p0aJarpqYmmghUyoACgYCSGTUYVuJPoC5f2xUW/w6wEH5UgfpQVFSk7DUc0NDQkHJNMlh3d/eXqqoqMTU1Jfx+v7ImJydFRUWF4Hez0o/3fB0cHDQWkKSnrBlkBmBYm+J8ubBFWVkZfL2ypvLz8wUTwThA8/Pzoqmp6Y/8alwTMqNlExMTwuVy/ZT+2MuM1AVI1/gBnQG15fPBwYGloaFB07+xsZEODw9vxSgnJye8s7Nj3DwE0YPOPGbMgd4YBggKDNGTz6wxv1ZXVzX9ucDhE5TPp6enFq65lAa0e+8ZBYnClEUNaoNNKOC7dnJyosgDF75bFrXVahWhUMhY2g8MDID2PhXtZ8EmFDDGEqzx8XEFjNfr/ayivR+SYbgOcZEKtAMosEr4vGATBjesjo6OHzIzN+87i4uLNSn/6NaBNoB2AAXW0To6uW6iW1tb6etlEhTaART4gebqR2YSgbkPUMrjx/DwMC0sLJDT6YxAZySbePx4wfM3jY6O6pqLDJmHpDFziGdmgujhYFC7tbWVmJEpD2gxV4bB+/j4+L+OsBl3JD80MzOjjKbpNsSYnp4mbkEBTaW2WCyOxcXFUHl5uZLKdC7EWFpaCuTl5b2JucLnfz+eAT0DSrP9FWAA7Hbentd2FJMAAAAASUVORK5CYII=";
	var icono = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAQAAABLCVATAAABJklEQVR4Ae3VPYrbUBRA4a+RJ1VSJswvGG8mhYsswRhtxT/YmNEuhtEiAmpcJjBJOQsYyyBMsF0qXcjDjNF7pAnJOd0tTqN3r/yLfPCsFfrsvUje+ao91RdvRfBGpX3Fzy6c4UKh0Ua6U+gJKLSJFgKa5FAjoE23W6hRWpp4UKeHNnIZgMzIS0rom1shXHqKDW3cgoHC2tq9PriyiQvl4JPjr8nBEIxjQo0MA8dguneHTN09VL7ySBfgsXtoCdYnoQpMu4cmZ0Oz7qEHcH8SmoOye6iWoe8QTH+4QWYb8/lHYGj/W+YjyOPe0YtLcGehUpm7Adfq2BV5coWQa9/TlnYcLG2uTj8jtUdTM6VtxBlJNGCXnGn+1PFfCegl/Y4aKz1/Lf/5CShXgVKz4A8DAAAAAElFTkSuQmCC";
	$("#iconPortada").attr("src", iconoportada);
	$("#iconPerfil").attr("src", icono);

	$("#actualizarPortada").on('click', function(e){
    	e.preventDefault();
    	$("#uploadPortada:hidden").trigger('click');
    	$("#uploadPortada").on("change", function(){
    		if (this.files && this.files[0]) {
		    	var FR= new FileReader();
		    	FR.addEventListener("load", function(e) {
		    		$("#portada").attr("src", e.target.result);
		    	}); 
		    	FR.readAsDataURL( this.files[0] );
	  		}
    	})
	});
	$("#actualizarPerfil").on('click', function(e){
		e.preventDefault();
		$("#uploadFoto:hidden").trigger('click');
		$("#uploadFoto").on("change", function(){
			if (this.files && this.files[0]) {
		    	var FR= new FileReader();
		    	FR.addEventListener("load", function(e) {
		    		$("#foto").attr("src", e.target.result);
		    	}); 
		    	FR.readAsDataURL( this.files[0] );
	  		}
		})
	})
});