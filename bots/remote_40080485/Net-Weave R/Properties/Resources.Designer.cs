﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.17020
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace Net_Weave_R.Properties {
    using System;
    
    
    /// <summary>
    ///   A strongly-typed resource class, for looking up localized strings, etc.
    /// </summary>
    // This class was auto-generated by the StronglyTypedResourceBuilder
    // class via a tool like ResGen or Visual Studio.
    // To add or remove a member, edit your .ResX file then rerun ResGen
    // with the /str option, or rebuild your VS project.
    [global::System.CodeDom.Compiler.GeneratedCodeAttribute("System.Resources.Tools.StronglyTypedResourceBuilder", "4.0.0.0")]
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute()]
    [global::System.Runtime.CompilerServices.CompilerGeneratedAttribute()]
    internal class Resources {
        
        private static global::System.Resources.ResourceManager resourceMan;
        
        private static global::System.Globalization.CultureInfo resourceCulture;
        
        [global::System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1811:AvoidUncalledPrivateCode")]
        internal Resources() {
        }
        
        /// <summary>
        ///   Returns the cached ResourceManager instance used by this class.
        /// </summary>
        [global::System.ComponentModel.EditorBrowsableAttribute(global::System.ComponentModel.EditorBrowsableState.Advanced)]
        internal static global::System.Resources.ResourceManager ResourceManager {
            get {
                if (object.ReferenceEquals(resourceMan, null)) {
                    global::System.Resources.ResourceManager temp = new global::System.Resources.ResourceManager("Net_Weave_R.Properties.Resources", typeof(Resources).Assembly);
                    resourceMan = temp;
                }
                return resourceMan;
            }
        }
        
        /// <summary>
        ///   Overrides the current thread's CurrentUICulture property for all
        ///   resource lookups using this strongly typed resource class.
        /// </summary>
        [global::System.ComponentModel.EditorBrowsableAttribute(global::System.ComponentModel.EditorBrowsableState.Advanced)]
        internal static global::System.Globalization.CultureInfo Culture {
            get {
                return resourceCulture;
            }
            set {
                resourceCulture = value;
            }
        }
        
        internal static System.IO.UnmanagedMemoryStream beep_1 {
            get {
                return ResourceManager.GetStream("beep_1", resourceCulture);
            }
        }
        
        internal static System.IO.UnmanagedMemoryStream boing_2 {
            get {
                return ResourceManager.GetStream("boing_2", resourceCulture);
            }
        }
        
        /// <summary>
        ///   Looks up a localized string similar to using System;
        ///using System.Collections.Generic;
        ///using System.Text;
        ///using System.IO;
        ///using System.Reflection;
        ///using System.Diagnostics;
        ///using System.Resources;
        ///class Program
        ///{
        ///    public delegate void LoadRes();
        ///    public delegate void LoadAsm();
        ///    public delegate void RunAsm();
        ///    static string[] parts = new string[] { &quot;[PART1]&quot;, &quot;[PART2]&quot; };
        ///    static int Main(string[] args)
        ///    {
        ///        try
        ///        {
        ///            byte[] bData = null;
        ///           // Stream str = null;
        ///            Ass [rest of string was truncated]&quot;;.
        /// </summary>
        internal static string cryStub {
            get {
                return ResourceManager.GetString("cryStub", resourceCulture);
            }
        }
        
        internal static System.IO.UnmanagedMemoryStream IM08 {
            get {
                return ResourceManager.GetStream("IM08", resourceCulture);
            }
        }
        
        internal static byte[] Mono_Cecil {
            get {
                object obj = ResourceManager.GetObject("Mono_Cecil", resourceCulture);
                return ((byte[])(obj));
            }
        }
        
        internal static byte[] XPlugin {
            get {
                object obj = ResourceManager.GetObject("XPlugin", resourceCulture);
                return ((byte[])(obj));
            }
        }
    }
}
