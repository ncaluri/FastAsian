import { createClient } from '@supabase/supabase-js'

const supabaseUrl =
  (typeof import.meta !== 'undefined' && import.meta.env && import.meta.env.VITE_SUPABASE_URL) ||
  (typeof process !== 'undefined' && process.env && process.env.VITE_SUPABASE_URL) ||
  'https://oqcnrmepzzmyotpeccer.supabase.co'

const supabaseAnonKey =
  (typeof import.meta !== 'undefined' && import.meta.env && import.meta.env.VITE_SUPABASE_ANON_KEY) ||
  (typeof process !== 'undefined' && process.env && process.env.VITE_SUPABASE_ANON_KEY) ||
  'sb_publishable_9vPykN5t7iXStdhH23UAYw_MPUPKT44'

if (!supabaseUrl || !supabaseAnonKey) {
  console.warn('Supabase URL/key are missing from Vite environment variables.')
}

export const supabase = createClient(supabaseUrl, supabaseAnonKey)