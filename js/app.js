const { createApp } = Vue

createApp({
	data() {
		return {
			discs: [],
		}
	},
	methods: {
		getDisc() {
			axios.get('./server.php').then((res) => {
				this.discs = res.data;
				// console.log(this.discs);
			})
		},
	},
	created() {
		this.getDisc()
	},
}).mount('#app')
