
const obtenerCausas = async()=>{
    try{
        const url = "api/causas/get";
        let resp = await axios.get(url);
        return resp.data;
    }catch(e){
        console.log(e);
        return null;
    }
};