import { supabase } from './supabaseClient.js';

async function testIncheck() {
  const { data, error } = await supabase.rpc('incheck_student', {
    student_id: 1
  });

  if (error) {
    console.log("❌ Incheck fout:", error);
  } else {
    console.log("✅ Incheck werkt!");
  }
}

testIncheck();
