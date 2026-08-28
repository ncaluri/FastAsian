import { supabase } from './supabaseClient.js'

async function testVerbinding() {
  console.log("Bezig met ophalen uit Supabase...")
  
  // Vraag data op uit Supabase
  const { data, error } = await supabase.from('studenten').select('*')

  if (error) {
    console.log("Er is een fout:", error.message)
  } else {
    console.log("HET WERKT! Data ontvangen:", data)
  }
}

testVerbinding()