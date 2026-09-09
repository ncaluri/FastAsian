import { supabase } from './supabaseClient.js';

document.getElementById('testApi').addEventListener('click', async () => {
    const { data, error } = await supabase.from('studenten').select('*');

    if (error) {
        document.getElementById('result').innerText = "❌ API fout: " + error.message;
    } else {
        document.getElementById('result').innerText = "✅ API werkt! " + JSON.stringify(data);
    }
});


//test